@extends('translation::layout')
@php

    foreach ($languages as $language) {
       $directory = resource_path("lang/$language/");
       $totalElements = 0;

       $files = glob($directory . '*.php');
       foreach ($files as $file) {
           $content = require $file;
           $totalElements += count($content);
       }

       $elementCounts[$language] = $totalElements;
   }
@endphp
@section('body')

    @if(count($languages))

        <div class="panel w-1/2">

            <div class="panel-header">

                {{ __('translation::translation.languages') }}

                <div class="flex flex-grow justify-end items-center">

                    <a href="{{ route('languages.create') }}" class="button">
                        {{ __('translation::translation.add') }}
                    </a>

                </div>

            </div>

            <div class="panel-body">

                <table>

                    <thead>
                    <tr>
                        <th>{{ __('translation::translation.language_name') }}</th>
                        <th>{{ __('translation::translation.locale') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($languages as $language => $name)
                        <tr>
                            <td>
                                {{\App\Models\SiteLanguage::where('code',$name)->first()->name .' (' . $elementCounts[$language] .')' }}
                            </td>
                            <td>
                                <a href="{{ route('languages.translations.index', $language) }}">
                                    {{ $language }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>

        </div>

    @endif

@endsection
