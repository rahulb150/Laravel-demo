@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
                      @if ($errors->any())
                          <div class="alert alert-danger">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="first_name" class="form-control" name="first_name" value="{{ old('first_name') }}">                                  
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="last_name" class="form-control" name="last_name" value="{{ old('last_name') }}">                                 
                              </div>
                          </div>  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" value="{{ old('email') }}">                                 
                              </div>
                          </div>  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password">                                  
                              </div>
                          </div>
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Phone</label>
                              <div class="col-md-6">
                                  <input type="text" id="phone" class="form-control" name="phone" value="{{ old('phone') }}">                                  
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Profile Pic</label>
                              <div class="col-md-6">
                                  <input type="file" id="profile_pic" class="form-control" name="profile_pic">                                 
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Hobbies</label>
                              <div class="col-md-6">
                                  <select multiple class="form-control" name="hobbies[]" id="hobbies">                                    
                                    <option value="Singing">Singing</option>
                                    <option value="Sports">Sports</option>
                                    <option value="Gaming">Gaming</option>
                                    <option value="Surfing">Surfing</option>
                                    <option value="Music">Music</option>
                                  </select>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection