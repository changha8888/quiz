@if (!$model->isAdmin())
    <x-utils.edit-button :href="route('admin.program.semester.edit', $model)" />
    <x-utils.delete-button :href="route('admin.program.semester.destroy', $model)" />
@endif
