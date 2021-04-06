@extends('hello::layouts.master')

@section('content')
    <p>메시지를 작성해 주세요</p>
    <form action="{{ route('hello.send') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="이름">
        <input type="email" name="email" placeholder="이메일">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="submit">
    </form>
@endsection

