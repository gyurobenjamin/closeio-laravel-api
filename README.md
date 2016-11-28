# closeio-laravel-api
Laravel API Client for Close.io http://developer.close.io/


## Installation

Install via composer - edit your `composer.json` to require the package.

```js
"require": {
    "gyurobenjamin/closeio-laravel-api": ""
}
```

## Laravel

To use in laravel add the following to the `providers` array in your `config/app.php`

```php
Gyurobenjamin\CloseioLaravelApi\CloseioClient::class
```

Next add the following to the `aliases` array in your `config/app.php`

```php
'CloseioClient' => Gyurobenjamin\CloseioLaravelApi\CloseioClient::class
```

## Usage
#### Leads
```
$client = new CloseioClient(); // Create a new Closeio Instance.

$client->lead->get(); // Retrieve a single lead
$client->lead->search(); // List or search for leads
$client->lead->delete($id); // Delete a lead
$client->lead->update(); // Update an existing lead
$client->lead->create(); // Create a new lead
```
#### Contacts
```
$client = new CloseioClient(); // Create a new Closeio Instance.

$client->contact->get(); // Retrieve a single contact
$client->contact->search(); // List or search for contact
$client->contact->delete(); // Delete a contact
$client->contact->update(); // Update an existing contact
$client->contact->create(); // Create a new contact
```
#### Activities
```
$client = new CloseioClient(); // Create a new Closeio Instance.

$client->activity->get(); // Retrieve a single activity
$client->activity->search(); // List or search for activity
$client->activity->delete(); // Delete a activity
$client->activity->update(); // Update an existing activity
$client->activity->create(); // Create a new activity
```
#### Opportunities
```
$client = new CloseioClient(); // Create a new Closeio Instance.

$client->opportunity->get(); // Retrieve a single opportunity
$client->opportunity->search(); // List or search for opportunity
$client->opportunity->delete(); // Delete a opportunity
$client->opportunity->update(); // Update an existing opportunity
$client->opportunity->create(); // Create a new opportunity
```
#### Tasks
```
$client = new CloseioClient(); // Create a new Closeio Instance.

$client->task->get(); // Retrieve a single task
$client->task->search(); // List or search for task
$client->task->delete(); // Delete a task
$client->task->update(); // Update an existing task
$client->task->create(); // Create a new task
```
#### Users
```
$client = new CloseioClient(); // Create a new Closeio Instance.

$client->user->get(); // Retrieve a single user
$client->user->search(); // List or search for user
$client->user->delete(); // Delete a user
$client->user->update(); // Update an existing user
$client->user->create(); // Create a new user
```
#### Organizations
```
$client = new CloseioClient(); // Create a new Closeio Instance.

$client->organization->get(); // Retrieve a single organization
$client->organization->search(); // List or search for organization
$client->organization->delete(); // Delete a organization
$client->organization->update(); // Update an existing organization
$client->organization->create(); // Create a new organization
```