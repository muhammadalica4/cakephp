<h1>Contacts</h1>
<table>
    <tr>
        <th>id</th>
        <th>first_name</th>
        <th>last_name</th>
        <th>phone_number</th>
    </tr>

    <!-- Here is where we iterate through our $articles query object, printing out article info -->

    <?php foreach ($contacts as $contact): ?>
    <tr>
        <td><?= $contact->id ?></td>
        <td><?= $contact->first_name ?></td>
        <td><?= $contact->last_name ?></td>
        <td><?= $contact->phone_number ?></td>
    </tr>
    <?php endforeach; ?>
</table>