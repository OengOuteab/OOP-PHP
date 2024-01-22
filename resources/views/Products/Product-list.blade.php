@extends ('layouts.master')
@section('page')

<h1 class="aaa"><a href="index.html">Product</a></h1>
<div class="dv">
    
    <a href="{{url('/Products/add')}}" class="btn2"><span data-feather="plus-circle"></span>
        Add</a>
    

    
</div><br>
 <table>
            <thead >
                <tr>
                <th>ID</th>
                <th >Product Name</th>
                <th >Price</th>
                <th >QTY</th>
                <th ></th>
                <th >Description</th>
                <th>E</th>
                <th>Edit</th>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="btn-action"><a href="#"><span data-feather="trash-2">d</span></a>
                       
                    </td>
                    <td class="btn-action"><a href="{{url('/Products/edit')}}"><span class="text-primary" data-feather="edit">e</span></a>
                        
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                     <td class="btn-action"><a href="#"><span data-feather="trash-2">d</span></a>
                       
                    </td>
                    <td class="btn-action"><a href="{{url('/Products/edit')}}"><span class="text-primary" data-feather="edit">e</span></a>
                        
                    </td>
                </tr>
               
            </thead>
            {{-- <tbody>
                <tr>
                    <th >1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody> --}}
        </table>
</table>
@endsection