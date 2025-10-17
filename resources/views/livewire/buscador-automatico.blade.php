<div style="margin-top: 20px;">


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form class="d-flex">
                <div class="input-group">
                    <input wire:model.live="nombre" class="form-control form-control-lg" type="search" placeholder="Buscar producto en inventario..." aria-label="Search">
                    <button class="btn btn-primary px-4" style="background: #0300b4" type="submit">
                            <i class="bi bi-search"></i>
                        </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card mt-5">
    <div class="table-responsive">
   <table class="table" style="text-align: center">
       <thead class="text-info">
           <th>ID</th>
           <th>Nombre</th>
           <th>TIPO</th>
           <th>DESCRIPCION</th>
           <th>Fecha de creación</th>
           <th class="text-rigth">Revisar</th>
       </thead>
       <tbody>
           @forelse ($inventarios as $inventario)
               <tr>
                   <td>{{ $inventario->id }}</td>
                   <td>{{ $inventario->nombre }}</td>
                   <td>{{ $inventario->tipo }}</td>
                   <td>{{ $inventario->descripcion }}</td>
                   <td>{{ $inventario->created_at }}</td>
                   <td class="td-actions text-center">
                           <a href="{{ route('inventario.edit', $inventario->id) }}"
                               class="btn btn-success">
                            <i class="bi bi-eye"></i>
                            </a>
                   </td>
               </tr>
           @empty
               No tine datos
           @endforelse
       </tbody>
   </table>
</div>
</div>
</div>
