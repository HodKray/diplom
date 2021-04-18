@extends('admin')

@section('title', 'Создать тур')

@section('content_table')
    <div class="container">
        <h2 class="text-center mt-3">Создать тур</h2>
        <div class="d-flex flex-row justify-content-center ">
            <form action="/tours/create" method="post" enctype="multipart/form-data">
                @csrf
                <label for="service_id" class="form-label">Город</label>
                <select class="form-select" name="service_id">
                    @foreach($services as $service)
                        <div class="form_input">
                            <option value="{{$service->id}}">{{$tour->services->countries->cities->title}}</option>
                        </div>
                    @endforeach
                </select>
                <label class="form-label mt-3 " for="departure_date">Дата отправления</label>
                <input class="form-control" type="date" name="departure_date" required>

                <label class="form-label mt-3" for="arrival_date">Дата прибытия</label>
                <input class="form-control" type="date" name="arrival_date" required>

                <label class="form-label mt-3" for="price">Cтоимость тура</label>
                <input class="form-control" type="number" name="price" required>

                <label class="form-label mt-3" for="quantity_man">Количество человек</label>
                <input class="form-control" type="number" name="quantity_man" required>

                <label for="transport_id" class="form-label">Транспорт</label>
                <select class="form-select" name="transport_id" required>
                    @foreach($transports as $transport)
                        <div class="form_input">
                            <option value="{{$transport->id}}">{{$transport->title}}</option>
                        </div>
                    @endforeach
                </select>
                <label class="form-label mt-3" for="photo">Фото</label>
                <input class="form-control" type="file" name="photo" accept="image/jpg,image/jpeg,image/png,image/bmp" required>

                <div class="d-flex justify-content-center mt-3">
                    <input class="btn btn-success" type="submit" value="Создать">
                </div>
            </form>
        </div>
    </div>
@endsection
