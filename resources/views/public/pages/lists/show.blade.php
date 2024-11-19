@extends('public.layout')

@section('tab-title', "All Lists")

@section('content')

  <div class="container mt-5">
    <section class="px-3">
      <div class="border border-1 shadow  p-2 rounded" style="background-color: #37517e">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active fw-bold" style="background-color: #eee"
            id="list-tab" data-bs-toggle="tab" data-bs-target="#list-tab-pane" type="button" role="tab" aria-controls="list-tab-pane" aria-selected="true">
              Shopping List
            </button>
          </li>
        </ul>
        <div class="tab-content bg-white" id="myTabContent" >
          <div class="tab-pane fade show active p-3" id="list-tab-pane" role="tabpanel" aria-labelledby="list-tab" tabindex="0">
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Task</th>
                  <th scope="col">Description</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody class="table-group-divider">
                <tr>
                  <th scope="row">1</th>
                  <td>Buy Bla bla</td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugit?</td>
                  <td>
                    <a href="#" class="btn btn-success p-2 pt-0">
                      <i class="bi bi-check2-square"></i>
                    </a>
                    <a href="#" class="btn btn-danger p-2 pt-0">
                      <i class="bi bi-trash"></i>
                    </a>
                  </td>
                </tr>

                <tr>
                  <th scope="row" class="bg-success text-white">2</th>
                  <td>Buy Bla bla</td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, fugit?</td>
                  <td>
                    <a href="#" class="btn btn-primary p-2 pt-0">
                      <i class="bi bi-arrow-counterclockwise"></i>
                    </a>
                    <a href="#" class="btn btn-danger p-2 pt-0">
                      <i class="bi bi-trash"></i>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </section>
  </div>

@endsection