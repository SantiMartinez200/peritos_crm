import { usePage } from '@inertiajs/vue3';

interface PageProps {
  appName?: string;
  auth?: {
    user?: {
      id: number;
      name: string;
      email: string;
    };
  };
}

export function useGlobals() {
  const page = usePage();
  // Forzamos a TypeScript a entender qué tiene props.value
  const props = (page?.props?.value ?? {}) as PageProps;

  return {
    appName: props.appName ?? 'CRMsaras',
    user: props.auth?.user ?? null,
  };
}
