@extends('layouts.admin')
@section('title') Список новостей - @parent @stop
@section('slug')  @parent @stop
@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Новости</h1>
        <a href="{{ route('admin.news.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> Добавить новую</a>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Заголовок</th>
                    <th>Текст</th>
                    <th>Дата добавления</th>
                    <th>Управление</th>
                </tr>
                </thead>
                <tbody>
                    @forelse($newsList as $news)
                        <tr>
                            <td>{{$news['title']}}</td>
                            <td>{{$news['description']}}</td>
                            <td>{{now()->format('d-m-Y H:i')}}</td>
                            <td><a href="{{ route('admin.news.edit', ['news'=> $news['id']]) }}" style="font-size: 12px;" >ред.</a>&nbsp;
                                <a href="javascript:;" style="font-size: 12px; color: red;">уд.</a></td>

                        </tr>
                    @empty
                    <tr>
                        <td colsan="4">Новостей не найдено</td>
                        @endforelse
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
