<ul class="nav nav-tabs justify-content-center mt-4">
    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'programming.trees' ? 'active' : '' }}" href="{{ route('programming.trees') }}">Trees</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'programming.linkedlists' ? 'active' : '' }}" href="{{ route('programming.linkedlists') }}">Linked Lists</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'programming.stack&queue' ? 'active' : '' }}" href="{{ route('programming.stack&queue') }}">Stack & Queue</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'programming.arrays' ? 'active' : '' }}" href="{{ route('programming.arrays') }}">Arrays</a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ Route::currentRouteName() == 'programming.string' ? 'active' : '' }}" href="{{ route('programming.string') }}">String</a>
    </li>
</ul>