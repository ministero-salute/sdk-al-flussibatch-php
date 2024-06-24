
# Access Layer

Nel file Test.php ci sono dei unit tests che dimostrano come utilizzare l'API php di AccessLayer.

I clienti dell'API, dopo la creazione dell'oggetto AccessLayer, devono chiamare il metodo Init() passando come parametro l'url del servizio pubblicato (cioè l'url di AccessLayer)

## esempio

```php
public function CallAccessLayer(@parameters)
{
	$host = "https://localhost:8080/";
	$accessLayer = new AccessLayer();
	$accessLayer->Init($host);

	$response = $accessLayer->SingleRecord(@parameters);
}
```

## disclaimer

Impostare l'utente/password di bitbucket per il corretto funzionamento di composer (repo git di digitouch-mds) oppure impostare le credenziali SSH nel file composer.json.

Ricordarsi di eseguire '$>composer install' per scaricare tutti i packages richiesti per il corretto funzionamento dell'API.

(vedere la documentazione **installazione e configurazione** per una guida dettagliata sull'integrazione).

## mantainer:
 Accenture SpA until January 2026