# closeio-laravel-api
Laravel API Client for Close.io http://developer.close.io/


## Installation

Install via composer - edit your `composer.json` to require the package.

```
composer require gyurobenjamin/closeio-laravel-api
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

list($lead, $error) = $client->lead->get($id); // Retrieve a single lead
list($leads, $error) = $client->lead->search($whateverString); // List or search for leads
list($result, $error) = $client->lead->delete($id); // Delete a lead
list($lead, $error) = $client->lead->update($id, $newLead); // Update an existing lead
list($lead, $error) = $client->lead->create($lead); // Create a new lead
```
#### Contacts
```
$client = new CloseioClient(); // Create a new Closeio Instance.

list($contact, $error) = $client->contact->get($id); // Retrieve a single contact
list($contacts, $error) = $client->contact->search($whateverString); // List or search for contact
list($result, $error) = $client->contact->delete($id); // Delete a contact
list($contact, $error) = $client->contact->update($id, $newContact); // Update an existing contact
list($contact, $error) = $client->contact->create($contact); // Create a new contact
```
#### Activities
```
$client = new CloseioClient(); // Create a new Closeio Instance.

list($activity, $error) = $client->activity->get($id); // Retrieve a single activity
list($activities, $error) = $client->activity->search($whateverString); // List or search for activity
list($result, $error) = $client->activity->delete($id); // Delete a activity
list($activity, $error) = $client->activity->update($id, $newActivity); // Update an existing activity
list($activity, $error) = $client->activity->create($activity); // Create a new activity
```
#### Opportunities
```
$client = new CloseioClient(); // Create a new Closeio Instance.

list($opportunity, $error) = $client->opportunity->get($id); // Retrieve a single opportunity
list($opportunities, $error) = $client->opportunity->search($whateverString); // List or search for opportunity
list($result, $error) = $client->opportunity->delete($id); // Delete an opportunity
list($opportunity, $error) = $client->opportunity->update($id, $newOpp); // Update an existing opportunity
list($opportunity, $error) = $client->opportunity->create($opp); // Create a new opportunity
```
#### Tasks
```
$client = new CloseioClient(); // Create a new Closeio Instance.

list($task, $error) = $client->task->get($id); // Retrieve a single task
list($tasks, $error) = $client->task->search($whateverString); // List or search for task
list($result, $error) = $client->task->delete($id); // Delete a task
list($task, $error) = $client->task->update($id, $newTask); // Update an existing task
list($task, $error) = $client->task->create($task); // Create a new task
```
#### Users
```
$client = new CloseioClient(); // Create a new Closeio Instance.

list($user, $error) = $client->user->get($id); // Retrieve a single user
list($users, $error) = $client->user->search($whateverString); // List or search for user
list($result, $error) = $client->user->delete($id); // Delete a user
list($user, $error) = $client->user->update($id, $newUser); // Update an existing user
list($user, $error) = $client->user->create($user); // Create a new user
```
#### Organizations
```
$client = new CloseioClient(); // Create a new Closeio Instance.

list($org, $error) = $client->organization->get($id); // Retrieve a single organization
list($orgs, $error) = $client->organization->search($whateverString); // List or search for organization
list($result, $error) = $client->organization->delete($id); // Delete a organization
list($org, $error) = $client->organization->update($id, $newOrg); // Update an existing organization
list($org, $error) = $client->organization->create($org); // Create a new organization
```