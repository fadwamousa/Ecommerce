@extends('admin.layout.admin')
@section('content')
<div class="navbar">
  <a class="navbar-brand" href="#">Categories</a>

  <ul class="nav navbar-nav">

    @if(count($categories))

    @foreach($categories as $category)

    <li>
      <a href="{{ url('/admin/categories/'.$category->id) }}">{{ $category->name }}</a>
    </li>

    @endforeach

    @else
    <li>No Data found</li>

    @endif


  </ul>


  <a class="btn btn-primary pull-right navbar-right" data-toggle="modal" href="#category">Add Category</a>
   <div class="modal fade" id="category">
       <div class="modal-dialog">
           <div class="modal-content">
               <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                   <h4 class="modal-title">Add New</h4>
               </div>
               {!! Form::open(['action' => 'CategoriesController@store', 'method' => 'POST']) !!}
               <div class="modal-body">
                   <div class="form-group">
                       {{ Form::label('name', 'Title') }}
                       {{ Form::text('name', null, array('class' => 'form-control')) }}
                   </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Save changes</button>
               </div>
               {!! Form::close() !!}
           </div><!-- /.modal-content -->
       </div><!-- /.modal-dialog -->
   </div><!-- /.modal -->
   </div>

</div>

<section>
  <h3>products</h3>
  <table class="table table-hover">
    	<thead>
    		<tr>

    		</tr>
    	</thead>
    	<tbody>

        @if(count($products))

        @foreach($products as $product)

        <tr>
          <td>{{ $product->name }}</td>
        </tr>

        @endforeach

        @else
        <tr>
          <td>No Products</td>
        </tr>

        @endif

      </tbody>
    </table>
</section>
@endsection
