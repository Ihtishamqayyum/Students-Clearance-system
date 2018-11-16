@extends('mainlayout.index')
@section('content')
    <div id="wrapper">
        <div class="content-main">
            <div class="well">
                <table class="table table-danger">
                    <thead>
                    <tr>
                        <th>Name</th>
                       <th>Department</th>
                       <th>Batch</th>
                        <th>Program</th>
                       <th>Book Name</th>
                       <th>Issue Date</th>
                       <th>Return Date</th>
                        <th>Fine</th>
                    </tr>

                    <tr>
                        @foreach($bookissue as $book)
                        <td>{{$book->student->student->name}}</td>
                        <td>{{$book->student->department->departmentName}}</td>
                        <td>{{$book->student->batch->batchName}}</td>
                        <td>{{$book->student->program->programName}}</td>

                            <td>{{$book->book->bookName}}</td>
                        <td>{{$book->issueDate}}</td>

                        @if($book->returnDate==NULL)
                        <td>{{'Not Retured'}}</td>
                         @else
                            <td>{{$book->returnDate}}</td>
                          @endif
                            <td>
                                <?php
                                 if($book->returnDate!=null  ){
                                     $returnDate = \Illuminate\Support\Carbon::parse($book->returnDate);
                                     $issueDate = \Illuminate\Support\Carbon::parse($book->issueDate);
                                    $before = $issueDate < $returnDate;
                                       $difference = $issueDate->diff($returnDate)->days;
                                     if ($before && $difference < 15) {
                                         echo "Cleared";
                                     }
                                     else
                                         if($difference>15){
                                            /*echo $difference . "<br>";*/
                                            echo $fine=$difference*10;
                                           /* echo "yes";*/
                                         }
                                     }

                                 
                                ?>
                            </td>
                                            </tr>

                    @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>


    @endsection