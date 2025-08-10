<div class="col-md-3">
    <div class="card">
        <div class="card-header">
            الإعدادات
        </div>
        <div class="list-group list-group-flush">
            <a href="{{ route('user-profile-information.edit') }}" class="list-group-item list-group-item-action @if (request()->routeIs('user-profile-information.edit')) active @endif">الملف الشخصي</span></a>
            <a href="{{ route('user-password.edit') }}" class="list-group-item list-group-item-action @if (request()->routeIs('user-password.edit')) active @endif">كلمة المرور</span></a>
        </div>
    </div>
</div>