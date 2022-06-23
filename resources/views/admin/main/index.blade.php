@extends('admin.layouts.app')

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Главная</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item active">Главная</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{$data['usersCount']}}</h3>

                                <p>Пользователи</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-users"></i>
                            </div>
                            <a href="{{route('users.index')}}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{$data['postsCount']}}</h3>

                                <p>Посты</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-clipboard-list"></i>
                            </div>
                            <a href="{{route('posts.index')}}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{$data['categoriesCount']}}</h3>

                                <p>Категории</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-th-list"></i>
                            </div>
                            <a href="{{route('categories.index')}}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-danger">
                            <div class="inner">
                                <h3>{{$data['tagsCount']}}</h3>

                                <p>Теги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-tags"></i>
                            </div>
                            <a href="{{route('tags.index')}}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-gradient-blue">
                            <div class="inner">
                                <h3>{{$data['servicesCount']}}</h3>

                                <p>Услуги</p>
                            </div>
                            <div class="icon">
                                <i class="nav-icon fas fa-concierge-bell"></i>
                            </div>
                            <a href="{{route('services.index')}}" class="small-box-footer">Перейти <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- ./col -->
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
