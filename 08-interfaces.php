<?php

interface PdfInterface
{
    static public function generate(String $content) : String;
    static public function printPdf($file);
}

class DOMPDF implements PdfInterface
{
    static public function generate(String $content) : String
    {
        return "<h1>{$content}</h1>";
    }

    static public function printPdf($file)
    {
        return $file;
    }
}

class PdfFile implements PdfInterface
{
    static public function generate(String $content) : String
    {
        return "<h1>{$content}</h1>";
    }

    static public function printPdf($file)
    {
        return $file;
    }
}

class PDF extends DOMPDF
{
    
}

echo DOMPDF::generate("olá");
