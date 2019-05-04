@extends('admin.layout.admin')
@section('content')
    <h3>Orders</h3>
    <ul>
      @foreach($orders as $order)
      <li>Order by {{ $order->user->name }} Total Price {{ $order->total }}</li>

      <form  action="{{ route('toggle.deliver',$order->id) }}" method="post">
        {{ csrf_field() }}
        <label for="deliver">Deliver</label>
        <input type="checkbox" name="delivered" value="1" {{ $order->delivered ==1?'Deliverd':"" }}>
        <input type="submit"   value="submit">
      </form>

      <h5>
        <table class="table table-bordered">

          <tr>
            <th>name</th>
            <th>qty</th>
            <th>total</th>
          </tr>

          <tr>
            @foreach($order->ordersItems as $item)

            <td>{{ $item->name }}</td>
            <td>{{ $item->pivot->qty }}</td>
            <td>{{ $item->pivot->total }}</td>

            @endforeach
          </tr>

        </table>
      </h5>
      @endforeach
    </ul>
@endsection
