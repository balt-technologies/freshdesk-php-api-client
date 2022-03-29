# FreshDesk PHP API Client by BALT Technologies
An API client for FreshDesk written in PHP

# Pure API Example
## List Tickets

This is a basic example and doesn't wrap anything in models yet.

    use Balt\FreshDesk\Api\ApiClient;
    use Balt\FreshDesk\Api\TicketApi;
    use Balt\FreshDesk\Models\Configurations\Configuration;
    
    
    $configuration = new Configuration(
        apiKey: '<your_key>',
        domain: '<your_domain>.freshdesk.com'
    );
    
    $client = new ApiClient($configuration);
    $ticketApi = new TicketApi($client);
    
    // just dump everything
    print_r($ticketApi->list());

# Feedback and Support
For Feedback and any support contact us via our website (link below).

# Links

* [FreshDesk API](https://developers.freshdesk.com/api/)
* [BALT Technologies](https://www.balt.de)