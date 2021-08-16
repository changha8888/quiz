<x-utils.link
    class="c-subheader-nav-link"
    :href="route('admin.auth.user.deactivated')"
    :text="__('Tài khoản bị vô hiệu hóa')"
    permission="admin.access.user.reactivate" />

@if ($logged_in_user->hasAllAccess())
    <x-utils.link class="c-subheader-nav-link" :href="route('admin.auth.user.deleted')" :text="__('Tài khoản đã xóa')" />
@endif
