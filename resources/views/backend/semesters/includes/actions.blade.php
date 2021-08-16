@if (!$model->isAdmin())
    <x-utils.edit-button :href="route('admin.semester.edit', $model)" />
    <x-utils.delete-button :href="route('admin.semester.destroy', $model)" />
@endif
