@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            Poker
        </div>

        <div class="m-b-md">
            List Sessions: 
            <table class="table table-bordered table-striped" id="datatable-default">
                <thead>
                    <tr>
                        <th style="width: 50px">ID</th>
                        <th style="width: 400px">NAME</th>
                        <th>STATUS</th>
                        <th>ACTION</th>
                    </tr>
                </thead>
                @if(!empty($list))
                <tbody>
                    @foreach($list as $key => $row)
                    <tr class="gradeX" data-session-id="<?php echo $row->id ?>" data-session-type="poker">
                        <td><center><?php echo $row->id ?></center></td>
                        <td style="text-align: left;"><?php echo $row->name ?></td>
                        <td><center><?php echo $row->status ?></center></td>
                        <td>
                            <center>
                                <button class="btn btn-xs btn-primary join">JOIN</button>
                                <button class="btn btn-xs btn-primary remove">REMOVE</button>
                            </center>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @else
                <tbody>
                    <tr class="gradeX">
                        <td><center>&nbsp;</center></td>
                        <td><center>&nbsp;</center></td>
                        <td><center>&nbsp;</center></td>
                        <td><center>&nbsp;</center></td>
                    </tr>
                </tbody>
                @endif
            </table>
        </div>

    </div>
</div>
@endsection