<div class="panel-body">

  <form method="POST" action="{{ route('storeuser') }}">
     @csrf
     <div class="mb-3">
         <label class="mb-1"><strong>Full Name.</strong></label>
         <input id="full_name" type="text" class="form-control @error('full_name') is-invalid @enderror" name="full_name"  required autocomplete="email" autofocus>

         @error('full_name')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>

     <div class="mb-3">
         <label class="mb-1"><strong>Email</strong></label>
         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

         @error('email')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>

     <div class="mb-3">
         <label class="mb-1"><strong>Mobile No.</strong></label>
         <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no"  required autocomplete="mobile_no" autofocus>

         @error('mobile_no')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>

     <div class="mb-3">
         <label class="mb-1"><strong>City</strong></label>
         <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"  required autocomplete="city" autofocus>

         @error('city')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>

   <div class="mb-3">
               <select name="role_id" class="form-control nav-selector">
                   <option value="">--- Select role ---</option>
                   @foreach ($roles as $key => $value)
                       <option value="{{ $key }}">{{ $value }}</option>
                   @endforeach
               </select>
           </div>

       <div class="mb-3">
                     <select name="restaurant_id" class="form-control nav-selector">
                         <option value="">--- Select restaurant ---</option>
                         @foreach ($address as $key => $value)
                             <option value="{{ $key }}">{{ $value }}</option>
                         @endforeach
                     </select>
                 </div>

     <div class="mb-3">
         <label class="mb-1"><strong>Password</strong></label>
         <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

         @error('password')
             <span class="invalid-feedback" role="alert">
                 <strong>{{ $message }}</strong>
             </span>
         @enderror
     </div>
     <div class="text-center">
       <a href="" class="btn btn-default pull-left", data-dismiss='modal'>Cancel</a>
       <button type="submit" class="btn btn-primary ml-4 pull-right">Save</button>
     </div>
 </form>


</div>

<script>
$( document ).ready(function() {
  var val = Math.floor(1000 + Math.random() * 9000);
  document.getElementById('password').value = val;
});
</script>
