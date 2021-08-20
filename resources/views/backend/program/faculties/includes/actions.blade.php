@if (!$model->isAdmin())
    <x-utils.edit-button :href="route('admin.program.faculty.edit', $model)" />
    <x-utils.delete-button :href="route('admin.program.faculty.destroy', $model)" />
@endif
