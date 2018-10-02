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
      <ul id="incomplete-tasks">
        
        <li class="editMode">
          <form action="{{ route('update', $task->id) }}" method="POST">
            <input type="checkbox">
            <!-- <label>{{ $task->content }}</label> -->
            <input name="content" type="text" value="{{ $task->content }}">
            <button class="edit">Update</button>
            
            @csrf
          </form>
        <!-- </li>
        <li class="editMode">
          <input type="checkbox">
          <label>Go Shopping</label>
          <input type="text" value="Go Shopping">
          <button class="edit">Edit</button>
          <button class="delete">Delete</button>
        </li> -->
        
      </ul>
      
      <h3>Completed</h3>
      <ul id="completed-tasks">
        <li>
          <input type="checkbox" checked>
          <label>See the Doctor</label>
          <input type="text">
          <button class="edit">Edit</button>
          <button class="delete">Delete</button>
        </li>
      </ul>
    </div>
@endsection