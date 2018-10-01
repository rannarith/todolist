@extends('layouts.master')
@section('content')

<div class="container">
    <form action="{{ route('logout') }}" method="POST">
      @csrf
      <p>Logged as <b>{{ Auth::user()->name}}</b> <button type="submit" href="">Logout</button></p>
      
    </form>
    <form action="{{ route('store') }}" method="post">
      <p>
        <label for="new-task">Add Item</label><input name="content" id="new-task" type="text">
        <button type="submit">Add</button>
        @csrf
      </p>
    </form>

      <h3>Todo</h3>
      
    <table class="table">
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>
                    <input type="checkbox" name="check" id="check1">  {{ $task->content }}
                </td>
                <td><a href="">Edit</a></td>
                <td><a href=""> Delete</a></td>
            </tr>
        @endforeach 
        </tbody>
    </table>
        
       
      
      
      <h3>Completed</h3>
      <ul id="completed-tasks">
        <li><input type="checkbox" checked><label>See the Doctor</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
      </ul>
    </div>
@endsection