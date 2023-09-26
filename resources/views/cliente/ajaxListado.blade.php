<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="tabla_user">
    <thead>
        <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
            <th class="min-w-125px">Nombre</th>
            <th class="min-w-125px">Ape. Paterno</th>
            <th class="min-w-125px">Ape. Materno</th>
            <th class="min-w-125px">Cedula</th>
            <th class="min-w-125px">Correo</th>
            <th class="text-end min-w-100px">Actions</th>
        </tr>
    </thead>
    <tbody class="text-gray-600 fw-semibold">
        @forelse ( $clientes as  $c )
            <tr>
                <td class="d-flex align-items-center">
                    <div class="d-flex flex-column">
                        <a class="text-gray-800 text-hover-primary mb-1">{{ $c->nombres }}</a>
                    </div>
                </td>
                <td>
                    <a class="text-gray-800 text-hover-primary mb-1">{{ $c->ap_paterno }}</a>
                </td>
                <td>
                    <a class="text-gray-800 text-hover-primary mb-1">{{ $c->ap_materno }}</a>
                </td>
                <td>
                    <a class="text-gray-800 text-hover-primary mb-1">{{ $c->cedula }}</a>
                </td>
                <td>
                    <span class="badge badge-light-success fw-bold">{{ $c->correo }}</span>
                </td>
                <td class="text-end">
                    <button onclick="" class="btn btn-icon btn-success btn-sm"><i class="fa fa-money-bill"></i></a>
                </td>
            </tr>
        @empty
            <h4 class="text-danger text-center">Sin registros</h4>
        @endforelse
    </tbody>
</table>
<!--end::Table-->
<script>
    $('#tabla_user').DataTable({
        {{--  responsive: true,
        language: {
            url: '{{ asset('datatableEs.json') }}',
        },
        order: [[ 0, "desc" ]]  --}}
    });
</script>
