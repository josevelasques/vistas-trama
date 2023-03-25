<div class="card">
    <div class="card-header">
        <h5 class="card-title">Puntos de venta</h5>
    </div>
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>Internet
                            Explorer 4.0
                        </td>
                        <td>Win 95+</td>
                        <td> 4</td>
                        <td>
                            <div class="btn-group">
                                <button wire:click='viewUser({{$user}})' class="btn btn-primary"><i class="fas fa-check-circle"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-times-circle"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
