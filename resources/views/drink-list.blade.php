@extends('template')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Makanan</th>
                <th scope="col">Total Order</th>
                <th scope="col">Rating</th>
                <th scope="col">Result</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($drinkData as $drink)
                <tr>
                    <td>{{ $drink['id'] }}</td>
                    <td>{{ $drink['name'] }}</td>
                    <td>{{ $drink['ordered'] }}</td>
                    <td>
                        @for ($i = 1; $i <= $drink['rating']; $i++)
                            <i class="fa fa-star" aria-hidden="true"></i>
                        @endfor
                    </td>
                    <td>
                        @switch($drink['rating'])
                            @case(5)
                                Excellent
                            @break

                            @case(4)
                                Good
                            @break

                            @case(3)
                                Fair
                            @break

                            @case(2)
                                Poor
                            @break

                            @case(1)
                                Bad
                            @break

                            @default
                                Wrong Input Data, Please check rating value [1-5]
                        @endswitch
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection
