<div class="main-content">
    {{-- <div class="alert alert-secondary mx-4" role="alert">
        <span class="text-white"><strong>Add, Edit, Delete features are not functional!</strong> This is a
            <strong>PRO</strong> feature!
            Click <strong><a href="https://www.creative-tim.com/live/soft-ui-dashboard-pro-laravel" target="_blank"
                    class="text-white">here</a></strong>
            to see the PRO
            product!</span>
    </div> --}}

    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0">All Users</h5>
                        </div>
                        <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseExample" aria-expanded="false"
                            aria-controls="collapseExample">+&nbsp; New
                            User</button>

                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            <form>
                                <div class="form-group">
                                    <label for="phone">Username</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="ni ni-circle-08"></i></span>
                                        <input type="text" wire:model.defer="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            placeholder="Username" aria-label="Username"
                                            aria-describedby="basic-addon1">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="ni ni-email-83"></i></span>
                                        <input type="text" name="email" wire:model.defer="email"
                                            class="form-control" placeholder="email@mail.com" aria-label="email"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="phone">Password </label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="ni ni-key-25"></i></span>
                                        <input type="text" name="password" wire:model.defer="password"
                                            class="form-control" placeholder="password" aria-label="text"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="phone">Role User</label>
                                    <div class="input-group">
                                        <select class="form-control" id="role">
                                            <option selected disabled>Select Role</option>
                                            @foreach ($role as $val_role)
                                                <option value="{{ $val_role->name }}">{{ $val_role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone number</label>
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">+</span>
                                        <input type="number" name="phone" wire:model.defer="phone"
                                            class="form-control" placeholder="62123456789" aria-label="text"
                                            aria-describedby="basic-addon1">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        ID
                                    </th>
                                    <th
                                        class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Photo
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Email
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        role
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Creation Date
                                    </th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($user as $row)
                                    <tr>
                                        <td class="ps-4">
                                            <p class="text-xs font-weight-bold mb-0">{{ $no++ }}</p>
                                        </td>
                                        <td>
                                            <div>
                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Admin</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">admin@softui.com</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-xs font-weight-bold mb-0">Admin</p>
                                        </td>
                                        <td class="text-center">
                                            <span class="text-secondary text-xs font-weight-bold">16/06/18</span>
                                        </td>
                                        <td class="text-center">
                                            <a href="#" class="mx-3" data-bs-toggle="tooltip"
                                                data-bs-original-title="Edit user">
                                                <i class="fas fa-user-edit text-secondary"></i>
                                            </a>
                                            <span>
                                                <i class="cursor-pointer fas fa-trash text-secondary"></i>
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if ($user->hasPages())
                            <nav aria-label="Page navigation example">
                                <ul class="pagination pagination-primary">
                                    @if ($user->onFirstPage())
                                        <li class="page-item" dissabled>
                                            <a class="page-link" href="#" aria-label="Previous">
                                                <i class="fa fa-angle-left"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $user->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <i class="fa fa-angle-left"></i>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                    @endif
                                    @php
                                        $lastPage = $user->lastPage();
                                    @endphp
                                    @for ($i = 1; $i <= $lastPage; $i++)
                                        <li class="page-item {{ url()->full() == $user->url($i) ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $user->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor
                                    @if ($user->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $user->nextPageUrl() }}"
                                                aria-label="Next">
                                                <i class="fa fa-angle-right"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    @else
                                        <li class="page-item" dissabled>
                                            <a class="page-link" href="#" aria-label="Next">
                                                <i class="fa fa-angle-right"></i>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    @endif

                                </ul>
                            </nav>
                        @endif
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- alipne modal --}}

    {{-- modal --}}


</div>
