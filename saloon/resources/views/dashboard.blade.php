<!-- Logout Button -->
<a href="#" class="btn btn-danger"
    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
    Logout
</a>

<!-- Hidden Logout Form -->
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>