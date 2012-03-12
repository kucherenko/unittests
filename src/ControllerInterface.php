<?php
/**
 *
 * @author Andrey Kucherenko <andrey@kucherenko.org>
 * @date 12.03.12
 *
 */
interface ControllerInterface
{
    public function preProccess(Request $request, Response $response);
    public function proccess(Request $request, Response $response);
    public function postProccess(Request $request, Response $response);
}
