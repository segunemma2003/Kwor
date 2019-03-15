@extends('layouts.user.master')
@section('content')

      <div class="page-holder w-100 d-flex flex-wrap">
        <div class="container-fluid px-xl-5">
          <section class="py-5">
            <div class="row">
              <div class="col-lg-9 mb-9">
                <div class="card">
                  <div class="card-header coins">
                    <h6 class="text-uppercase mb-0">Buy Unit</h6>
                  </div>
                  <div class="card-body">                           
                    <table class="table table-striped table-hover card-text">
                      <thead>
                        <tr>
                          <th>Unit</th>
                          <th>Amnt in Naira</th>
                          <th>Buy</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><input type="text" id="unit" class="form-control" onblur="add()" placeholder="" style="width: 50%;"></td>
                          <td  id="ans">unit * &#8358;1</td>
                          <td>
                            <form>
                              <input type="hidden" name="email" value="{{Auth::user()->email}}">
                              <input type="number" name="amount" id="total">

                            <button class="btn" onclick="Naira()">Buy</button>
                          </form>
                             
                            </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <script type="text/javascript">
   function Naira(){
	var unit= document.getElementById('unit').value;


    document.getElementById('ans').innerHTML= 1 * unit;
    return true;
}
function add(){
  var units=document.getElementById("unit").value;
  var new=document.getElementById('total');
  new.value=units*1;
  console.log(new.value);
}	


      </script>
@endsection