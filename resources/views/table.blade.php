@extends('template.master')

@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-2">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Basic Table</h6>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">First Name</th>
                                        <th scope="col">Last Name</th>
                                        <th scope="col">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Najem</td>
                                        <td>maul</td>
                                        <td>najem123@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Ripa</td>
                                        <td>salto</td>
                                        <td>ripps@email.com</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Maul</td>
                                        <td>akburan</td>
                                        <td>maulll@email.com</td>
                                    </tr>
                                </tbody>
                            </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection

