@extends('layouts.main')
@section('css')
@vite(['resources/css/regform/form.css'])

@endsection
@section('content')
<div class="main">
    <h1>Registration Form</h1>
    <p>Please fill out this form with the required informations</p>

    <form action="/register-form" method="post">
    @csrf
        <fieldset>
            <label>Enter Your First Name:
                <input type="text" name="firstName" required>
            </label>

            <label>Enter Your Last Name:
                <input type="text" name="lastName" required>
            </label>

            <label>Enter Your Email:
                <input type="email" name="email" required>
            </label>

            <label>Create a New Password:
                <input type="password" name="password" required>
            </label>

        </fieldset>


        <fieldset>
            <label>
                <input type="radio" name="account" value="personal" class="inline">Personal Account
            </label>

            <label>
                <input type="radio" name="account" value="business" class="inline">Business Account
            </label>

            <label>
                <input type="checkbox" name="terms" class="inline" required>I accept the <a href="https://www.freecodecamp.org/news/terms-of-service/">terms and conditions</a>
            </label>
        </fieldset>

        <fieldset>
            <label>Upload a profile picture:
                <input type="file" name="file">
            </label>

            <label>Input your age (years):
                <input type="number" name="age" min="12" max="100">
            </label>

            <label>
                <select>
                    <option value="">(select one)</option>
                    <option value="1">freeCodeCamp News</option>
                    <option value="2">freeCodeCamp YouTube Channel</option>
                    <option value="3">freeCodeCamp Forum</option>
                    <option value="4">Other</option>
                </select>
            </label>    

            <label>Provide a bio:
                <textarea name="text" rows="3" cols="30" placeholder="I like coding on the beach..."></textarea>
            </label>

        </fieldset>

        <input type="submit" value="Submit">







    </form>
</div>
    @endsection



