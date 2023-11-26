<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="card-title">
                <h3 class="m-0">Lista de Tarefas</h3>
            </div>
            <div class="card-tools">
                <a href="{{ route('tasks.create') }}" class="btn btn-success"><i class="las la-plus"></i> Criar Nova Tarefa</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->title }}</td>
                            <td>{{ $task->description }}</td>
                            <td>
                                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary"><i class="las la-edit"></i> Editar Tarefa</a>
                                <form method="POST" action="{{ route('tasks.delete', $task) }}" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="las la-trash"></i> Excluir Tarefa</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>