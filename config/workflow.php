<?php

return [
    'leave_request_v1' => [
        'type' => 'workflow',
        // The marking store can be omitted, and will default to 'multiple_state'
        // for workflow and 'single_state' for state_machine if the type is omitted
        'marking_store' => [
            'property' => 'state', // this is the property on the model, defaults to 'marking'
            'class' => MethodMarkingStore::class, // optional, uses EloquentMethodMarkingStore by default (for Eloquent models)
        ],
        // optional top-level metadata
        'metadata' => [
            // any data
            'title' => 'Simple leave request workflow',
        ],
        'supports' => ['App\Models\LeaveRequest'],
        // places (or states in state transistion workflow)
        'places' => [
            'draft' => [
                'metadata' => [
                    'min_num_of_approvers' => 1
                ]
            ], 
            'pending', 
            'approved', 
            'rejected', 
            'canceled'
        ],
        'initial_places' => ['draft'], // defaults to the first place if omitted
        'transitions' => [
            'submit' => [
                'from' => 'draft',
                'to' => 'pending',
                'metadata' => [

                ]
            ],
            'approve' => [
                'from' => 'pending',
                'to' => 'approved',
            ],
            'reject' => [
                'from' => 'pending',
                'to' => 'rejected',
            ],
            'cancel' => [
                'from' => 'pending',
                'to' => 'canceled',
            ],
        ],
    ],
];
