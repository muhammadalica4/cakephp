<h1>Add Contact</h1>
<?php
    echo $this->Form->create($contact);
    // Hard code the user for now.
    echo $this->Form->control('first_name');
    echo $this->Form->control('last_name');
    echo $this->Form->control('phone_number');
    echo $this->Form->control('address');
    echo $this->Form->control('company_id', ['options' => $companies]);
    echo $this->Form->control('notes');
    echo $this->Form->control('add_notes', ['rows' => '4']);
    echo $this->Form->control('internel_notes', ['rows' => '4']);
    echo $this->Form->control('comments', ['rows' => '4']);
    echo $this->Form->button(__('Save Contact'));
    echo $this->Form->end();
?>