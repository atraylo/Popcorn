'use strict';

module.exports = {
  errorCode: {
   // Success status code
   200: 'Request successful',
   201: 'Resource creation successful',
   202: 'The request was received. However, processing is not yet complete',
   204: 'The client informed the server to delete a resource and the server removed it',
   206: 'The request was successful. But only partial response',

   // Error status code
   400: 'The request was invalid. Data is incorrect, please try again',
   401: 'The request does not have permission. Missing API token, invalid or timeout',
   403: 'No permission to access',
   404: 'The request was sent for a record that does not exist and the server did not perform the operation.' ,
   406: 'Request failed. Request header inconsistent, please try again',
   410: 'The requested resource was permanently deleted and will not be available again.' ,
   422: 'Request failed. Please verify the parameters',

   // Server error status code
   500: 'An error occurred on the server, please check the server.' ,
   502: 'Gateway error',
   503: 'Service is not available, the server is temporarily overloaded or under maintenance.' ,
   504: 'Gateway timeout',
 },
};
