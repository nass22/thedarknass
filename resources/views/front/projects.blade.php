@extends('front.layout')

@section('title')
    Projects
@endsection

@section('mediaqueries')
<style>
@media screen and (min-width: 1024px) {
  h1 {
    font-size:50px;
    padding-top: 2rem;
  }

  section{
    margin-top: 2rem;
  }

}
</style>
@endsection

@section('content')

<section class="s-content" style="padding-bottom:1rem;">
    <div style="background-color: #74959A; width: 30%; height: 80%;">
      <h1 style="padding-left:4rem;  ">Projects:</h1>
    </div>
<div class="flex flex-col" style="padding-top:2rem;">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-left text-xl font-medium text-gray-500 uppercase tracking-wider">Project</th>
                <th scope="col" class="px-6 py-3 text-left text-xl font-medium text-gray-500 uppercase tracking-wider">Resume</th>
                <th scope="col" class="px-6 py-3 text-left text-xl font-medium text-gray-500 uppercase tracking-wider">Language</th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">View more</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
           @foreach($posts as $post)
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="ml-4">
                      <div class="text-xl font-medium text-gray-900">{{$post->title}}</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-xl text-gray-900">{{Str::limit($post->content, 50)}}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-xl text-gray-900">{{$post->language}}</div>
                  </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-xl font-medium">
                  <a href="/project/{{ $post->id }}" class="text-indigo-600 hover:text-indigo-900">View more</a>
                </td>
              </tr>
              @endforeach
  
              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</section>
    
@endsection