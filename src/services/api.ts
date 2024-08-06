export async function service<T>(endpoint: string, params?: Record<string, any>, options?: RequestInit): Promise<T> {
    const baseUrl = 'https://www.5fivexbrasil.com/wp-json/';
    const consumerKey = 'ck_f31ebee36bcee6b1fc18ab167564a10237580e70';
    const consumerSecret = 'cs_24e310ace422756e19a4d78cd7103e89696fb9c6';
  
    
    const auth = btoa(`${consumerKey}:${consumerSecret}`);
  
    
    const queryString = new URLSearchParams(params as any).toString();
  
    const response = await fetch(`${baseUrl}${endpoint}?${queryString}`, {
      ...options,
      headers: {
        'Authorization': `Basic ${auth}`,
        'Content-Type': 'application/json',
        ...options?.headers
      }
    });
  
    if (!response.ok) {
      throw new Error(`Network response was not ok: ${response.statusText}`);
    }
  
    return response.json() as Promise<T>;
}