@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Campaign</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="w3-padding w3-white notranslate">
                        <div class="table-responsive">
                            <table class="table table-striped">
                            <thead>
                                <tr>
                                  <th>Firstname</th>
                                  <th>Lastname</th>
                                  <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                  <td>John</td>
                                  <td>Doe</td>
                                  <td>john@example.com</td>
                                </tr>
                                <tr>
                                  <td>Mary</td>
                                  <td>Moe</td>
                                  <td>mary@example.com</td>
                                </tr>
                                <tr>
                                  <td>July</td>
                                  <td>Dooley</td>
                                  <td>july@example.com</td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
