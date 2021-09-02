<?php


function respond(\App\Service\DTO\ResponseDTO $responseDTO, $is_view = false, $route = "")
{
    if ($is_view) {
        if ($responseDTO->getCode() != 200) {
            if ($route != "")
                return redirect(route($route))->withErrors([$responseDTO->getDescription()])->withInput();
            else
                return redirect()->back()->withErrors([$responseDTO->getDescription()])->withInput();
        }
        if ($route != "")
            return redirect(route($route))->with('message', $responseDTO->getDescription());
        else
            return redirect()->back()->with('message', $responseDTO->getDescription());
    }
    return \response($responseDTO, $responseDTO->getCode());
}


function absolute_url($url)
{
    $urlGenerator = app('Illuminate\Routing\UrlGenerator');
    return $urlGenerator->to($url);
}


function encrypt_text($payload){
    return \Illuminate\Support\Facades\Crypt::encryptString($payload);
}

