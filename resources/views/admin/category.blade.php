@extends('admin.sidebar')
@section('title', 'Dashboard')
@section('content')
<style>
    .formclass{
        padding: 10px;
    }
</style>
       <div class="container px-6 mx-auto grid">
          <h2
            class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
            Category
          </h2>
          
        <!-- General elements -->
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
          <label class="block text-sm">
            <div class="formclass">
                <span class="text-gray-700 dark:text-gray-400">Category Name</span>
                <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                placeholder="Jane Doe"/>
            </div>
            <div class="formclass">
                <span class="text-gray-700 dark:text-gray-400">Description</span>
                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" ></textarea>
            </div> 
            <div class="formclass">
                <span class="text-gray-700 dark:text-gray-400">Category Image</span>
                <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="file"/>
            </div>
          </label>
        </div>
        </div>
    
@stop

