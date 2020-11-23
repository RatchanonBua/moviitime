@extends('layouts.app')

@section('content')
    <div class="container content-element">
        <div class="row" id="admin-primary-row">
            <div class="col-10"><h2>ALL USERS</h2></div>
            <div class="col-2 mt-1">
                <a class="dropdown-toggle pull-right" id="admin-dropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" href="#">SORT </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="admin-dropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user"></i>&ensp;&thinsp;ID NUMBER</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-edit"></i>&ensp;TOTAL REVIEWS</a>
                </div>
            </div>
        </div>
        {{-- USER LIST --}}
        <table class="table table-sm table-hover mt-2">
            {{-- HEADER --}}
            <thead class="thead-dark" id="user-table-header">
                <tr class="user-table-header">
                    <th class="text-right">ID</th>
                    <th class="text-left">USERNAME</th>
                    <th class="d-none d-lg-table-cell">REAL NAME</th>
                    <th class="d-none d-md-table-cell">EMAIL</th>
                    <th class="text-left">ROLE</th>
                    <th class="text-center d-none d-xl-table-cell">TOTAL REVIEWS</th>
                    <th class="text-center">PROFILE</th>
                    <th class="text-center">REVIEWS</th>
                </tr>
            </thead>
            {{-- LIST BODY --}}
            <tbody id="user-table-data">
                @php
                $exdata = array(['0001', 'ADMIN', 'Administrator', 'admin@moviitime.com', 'ADMINISTRATOR', 0],
                                ['0002', 'FALTZNER', 'Faltzner Thymes', 'faltzner.th@gmail.com', 'REVIEWER', 0],
                                ['0003', 'BENCFORD', 'Benjamin Crawford', 'benjamin.cf@gmail.com', 'REVIEWER', 1]);
                foreach ($exdata as $item) {
                    echo '<tr class="user-table-row">';
                    echo '<td class="text-right">'.$item[0].'</td>';
                    echo '<td class="text-left">'.$item[1].'</td>';
                    echo '<td class="d-none d-lg-table-cell">'.$item[2].'</td>';
                    echo '<td class="d-none d-md-table-cell">'.$item[3].'</td>';
                    echo '<td class="text-left">'.$item[4].'</td>';
                    echo '<td class="text-center d-none d-xl-table-cell">'.$item[5].'</td>';
                    echo '<td class="text-center"><a href="#"><i class="fa fa-user"></i></a></td>';
                    if ($item[5] > 0) {
                        echo '<td class="text-center"><a href="#"><i class="fa fa-commenting"></i></a></td>';
                    } else { echo '<td class="text-center"></td>'; }
                    echo '</tr>';
                }
                @endphp
            </tbody>
        </table>
    </div>
@endsection
