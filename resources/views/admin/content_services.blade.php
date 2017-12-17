<div style="margin: 0px 50px 0px 50px;">

    @if($services)


        <table class="table table-hover table-striped">

            <thead>
            <tr>
                <th>№ п/п</th>
                <th>Имя</th>
                <th>Текс</th>
                {{--<th>Изображение</th>--}}
                <th>Удалить</th>
            </tr>
            </thead>

            <tbody>

            @foreach($services as $k => $service)
                <tr>
                    <td>{{$service->id}}</td>
                    <td>{!! Html::link(route('serviceEdit',['service'=>$service->id]),$service->name,['alt'=>$service->name]) !!} </td>
                    <td>{{$service->text}}</td>
                    {{--<td>{{Html::image('/assets/img/'.$service->icon,'',array('style'=> 'width:150px'))}}</td>--}}

                    <td>
                        {!! Form::open(['url'=>route('serviceEdit',['page'=>$service->id]),'class'=>'form-horizontal','metod'=>'POST']) !!}
                        {{--{!! Form::hidden('_method','delete') !!}--}}

                        {{method_field('DELETE')}}

                        {!! Form::button('Удалить',['class'=>'btn btn-danger','type'=>'submit']) !!}

                        {!! Form::close() !!}
                    </td>
                </tr>

            @endforeach

            </tbody>

        </table>
    @endif
    {!! Html::link(route('serviceAdd'),'Новый Сервис') !!}

</div>