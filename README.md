[![Total Downloads](https://img.shields.io/packagist/dt/vedatbozkurt/task-management.svg?style=flat-square)](https://packagist.org/packages/vedatbozkurt/task-management)

## Laravel Task Management
Laravel Task Management on Models

## Installation

You can install the package via composer:

```bash
composer require vedatbozkurt/task-management
```


## Usage

Edit model file to add tasks.
```php
//package task model
use VedatBozkurt\TaskManagement\Models\Task;

class YourModel extends Model
{
    ...
    public function tasks()
    {
        return $this->morphMany(Task::class, 'taskable');
    }
    ...
}

```

Create Model Task;

```php
$your_model = YourModel::find($your_model_id);
$task = new Task;
$task->body = $request->body;
$task->status = $request->status;
$your_model->tasks()->save($task);
```

Get Model Tasks;

```php
YourModel::find($id)->tasks;
```

Get Task Owner Model Details;

```php
task owner id: {{ $task->taskable->id }}
task owner name: {{ $task->taskable->name }}
task owner details: {{ $task->taskable->your_model_table_column }}
...
```



## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.


## Security Vulnerabilities

If you would like to report an error, ask a question or offer a suggestion, please e-mail me at [info@wedat.org](info@wedat.org). All security vulnerabilities will be promptly addressed.

## License
This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
