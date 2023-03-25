<div>
    @if (!is_null($user))
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Datos del usuario</h5>
            </div>
            <div class="card-body">
                <p>{{ $user['id'] }}</p>
                <p>{{ $user['name'] }}</p>
                <p>{{ $user['email'] }}</p>
            </div>
        </div>
    @endif
</div>
