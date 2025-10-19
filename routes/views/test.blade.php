{{--@if ($age > 18)
    секретный текст
@elseif($age == 14)
    паспорт
@else
    маленький
@endif --}}


<table border="1px">
    <tr>
        <th>user</th>
        <th>surname</th>
        <th>banned</th>
    </tr>
@foreach($arr as $elem)
        <tr>
            <td style="width: 30px">{{ $elem['name'] }}</td>
            <td style="width: 60px">{{ $elem['surname'] }}</td>
            <td style="width: 90px">{{ $elem['banned'] ? "активен" : "не забанен"}}</td>
        </tr>
@endforeach
</table>
