@extends('app')
@section('content')
<section class="">
    <div class="container py-2">
        <div class="row bg-wh p-4 flex-column">
            <div class="px-4 text-dark">
                <p class="font-weight-bold fs-20">{{$user->name ?? ''}}</p>
                <p>{{$user->email ?? ''}}</p>
                <p>{{$user->phone ?? ''}}</p>
            </div>

            @if($user->work_experiences->isNotEmpty())
            <div class="px-4 mt-4 text-dark ">
                <h5 class="border-bottom">Work Experience</h5>
                <table class="table table-borderless">
                    @foreach($user->work_experiences as $experience)
                    <tr>
                        <td>
                            <span>{{date("F , Y", strtotime($experience->worked_from))}}</span>
                            <span>-</span>
                            @if($experience->worked_to)
                            <span>{{date("F , Y", strtotime($experience->worked_to)) }}</span>
                            @else
                            <span>Present</span>
                            @endif
                        </td>
                        <td>
                            <p>{{$experience->hospital_name ?? ''}}</p>
                            <p>{{$experience->address ?? ''}}</p>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif

            @if($user->educations->isNotEmpty())
            <div class="px-4  text-dark ">
                <h5 class="border-bottom">Education</h5>
                <table class="table table-borderless">
                    @foreach($user->educations as $edu)
                    <tr>
                        <td>
                            <span>{{date("F , Y", strtotime($edu->start))}}</span>
                            <span>-</span>
                            @if($edu->end)
                            <span>{{date("F , Y", strtotime($edu->end)) }}</span>
                            @else
                            <span>Present</span>
                            @endif
                        </td>
                        <td>
                            <p>{{$edu->school ?? ''}}</p>
                            @if($edu->major)<p>Major : {{$edu->major}}</p>@endif
                            @if($edu->gpa)<p>G.P.A : {{$edu->gpa}}</p>@endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif

            @if($user->skills->isNotEmpty())
            <div class="px-4 text-dark ">
                <h5 class="border-bottom">Skills</h5>
                <table class="table table-borderless">
                    @foreach($user->skills as $skill)
                    <tr>
                        <td> {{$skill->name}}</td>
                       <td>
                           @for($i=0;$i<$skill->level;$i++)
                           <div class="bold-dots"></div>
                           @endfor
                       </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            @endif
        </div>
    </div>
</section>
@endsection