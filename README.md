## Why?

I am interested in implementation of workflow in Laravel application. I found two workflow packages as the following:

- [Laravel-Workflow based on Symfony workflow package](https://github.com/zerodahero/laravel-workflow).
- [Spatie/Laravel-Model-States, simple and easy to learn!!](https://spatie.be/docs/laravel-model-states).

I had some experiences in implementation of workflow using Transition and States. At that time, it was coded for Joomla CMS. So the goal is to let users create new workflow without coding or less coding. 
- User can create workflow and attach to some object using GUI.
- States and transition can be defined using GUI.
- Transition is defined for one source state to destination state.
- Transition guards can be added to transition to allow/disallow this transition.
- I had implemented this for leave request system as well as advance budget request system.

I am looking for that kind of package, unfortunately nothing found. So I try to learn these two workflows before inventing the wheels.

## About the application
This application implements simple leave request system using predefined workflow. The employees in the organization unit want to request for request for leave from their manager(s). If time avaible, I will extended features to fit real life system.

## Main Packages Used
- Laravel breeze starter kit (TailwindCSS and Blade)
- Laravel workflow
- Livewire

## Contributing
Any suggestions and discussions on workkflow topic or leave request system are welcome.

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within the application, please send an e-mail to Prasit Gebsaap via [prasit.gebsaap@gmail.com](mailto:prasit.gebsaap@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The application is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
